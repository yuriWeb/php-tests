<?php
class Timer {
	protected $start;
	protected $end;

	public function start()
	{
		$this->start = $this->getMicro();
	}
	
	public function stop()
	{
		$this->end = $this->getMicro();
	}

    protected function getMicro() {
        list($microsec, $sec) = explode(" ", microtime());

        return $sec + $microsec;
    }
	
	public function __toString()
	{
		$str = 'Started at: '.$this->start.'<br>';
		$str .= 'Finished at: '.$this->end.'<br>';
		$str .= 'Duration: '.($this->end - $this->start).'<br>';
		
		return $str;
	}
}