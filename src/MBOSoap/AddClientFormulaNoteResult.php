<?php

namespace Nlocascio\Mindbody\MBOSoap;

class AddClientFormulaNoteResult extends MBResult
{

    /**
     * @var FormulaNote $FormulaNote
     */
    public $FormulaNote = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return FormulaNote
     */
    public function getFormulaNote()
    {
      return $this->FormulaNote;
    }

    /**
     * @param FormulaNote $FormulaNote
     * @return \Nlocascio\Mindbody\MBOSoap\AddClientFormulaNoteResult
     */
    public function setFormulaNote($FormulaNote)
    {
      $this->FormulaNote = $FormulaNote;
      return $this;
    }

}
