@inject('date', 'App\Utilities\date')

@if($date->isWeekend())
	{{'Repose toi'}}
@else
	{{'Va travailler'}}
@endif