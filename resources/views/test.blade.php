@php
	/**
	 * 
	 */
	class A
	{
		static $name = 'arina';
		public function getName()
		{
			return static::$name;
		}
	}
	/**
	 * 
	 */
	class B extends A
	{
		static $name = 'pasha';
	}
	$pasha = new B();
	echo $pasha->getName(), '<br>';

@endphp	