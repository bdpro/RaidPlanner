<?php

namespace Lodestone\Parser\Linkshell;

use Lodestone\Entities\{
    Linkshell\LinkshellSimple,
    Search\SearchLinkshell
};
use Lodestone\Modules\Logging\{Benchmark,Logger};
use Lodestone\Parser\Html\ParserHelper;

/**
 * Class Search
 *
 * @package Lodestone\Parser\Linkshell
 */
class Search extends ParserHelper
{
    /** @var SearchLinkshell */
    protected $results;

    /**
     * Parser constructor.
     *
     * @param int $id
     */
    function __construct()
    {
        $this->results = new SearchLinkshell();
    }

    /**
     * @return SearchLinkshell
     */
    public function parse()
    {
        $this->initialize();

        $started = Benchmark::milliseconds();
        Benchmark::start(__METHOD__,__LINE__);
    
        $this->pageCount();
        $this->parseList();

        Benchmark::finish(__METHOD__,__LINE__);
        $finished = Benchmark::milliseconds();
        $duration = $finished - $started;
        Logger::write(__CLASS__, __LINE__, sprintf('PARSE DURATION: %s ms', $duration));

        return $this->results;
    }
    
    /**
     * Parse page count
     */
    private function pageCount()
    {
        if (!$this->getDocument()->find('.btn__pager__current', 0)) {
            return;
        }
        
        // page count
        $data = $this->getDocument()->find('.btn__pager__current', 0)->plaintext;
        list($current, $total) = explode(' of ', $data);
        
        $this
            ->results
            ->setPageCurrent(filter_var($current, FILTER_SANITIZE_NUMBER_INT))
            ->setPageTotal(filter_var($total, FILTER_SANITIZE_NUMBER_INT))
            ->setNextPrevious();
        
        // member count
        $count = $this->getDocument()->find('.parts__total', 0)->plaintext;
        $count = filter_var($count, FILTER_SANITIZE_NUMBER_INT);
        $this->results->setTotal($count);
    }
    
    /**
     * Parse members
     */
    private function parseList()
    {
        if ($this->results->getTotal() == 0) {
            return;
        }
        
        $rows = $this->getDocumentFromClassname('.ldst__window');
        
        // loop through the list of characters
        foreach($rows->find('.entry') as $node) {
            // create simple linkshell
            $obj = new LinkshellSimple();
            $obj->setId( explode('/', $node->find('a', 0)->getAttribute('href'))[3] )
                ->setName( trim($node->find('.entry__name')->plaintext) )
                ->setServer( trim($node->find('.entry__world')->plaintext) );
            
            $this->results->addLinkshell($obj);
        }
    }
}