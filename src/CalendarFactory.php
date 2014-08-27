<?php

namespace Plummer\Calendar;

class CalendarFactory
{
	public static function fromRegistry(RegistryInterface $registry)
	{
		return static::fromIterator($registry->getIterator());
	}

	public static function fromIterator(\Iterator $iterator)
	{
		$calendar = Calendar::make($iterator, static::getDefaultRecurrenceTypes());

		return $calendar;
	}

	public static function getDefaultRecurrenceTypes()
	{
		return [
			new Daily()
		];
	}
}