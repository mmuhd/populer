<x-master>

<div class="flex mt-16">
	<div class="bg-gray-50 rounded p-4 w-full xl:w-1/2 lg:w-1/2">
		<h2 class="mb-4">Notifications</h2>
		@foreach($usernotifications as $notify)
			<p class="m-3">- {{$notify}}. </p>
		@endforeach
		
	</div>
	

</div>

</x-master>