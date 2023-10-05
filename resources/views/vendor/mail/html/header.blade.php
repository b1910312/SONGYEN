@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ url('https://scontent.fsgn5-11.fna.fbcdn.net/v/t39.30808-6/244493371_101081642356092_2142372272232446684_n.png?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=CyYRQFnOlaUAX9PS8UP&_nc_ht=scontent.fsgn5-11.fna&oh=00_AfB7kfEMHBhWbuE1MyjfxvbWSNW6lCzFzqkYbwbjviKVig&oe=63A0F984') }}" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
