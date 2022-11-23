@props(['url'])
<tr>
<td class="header">
<a href="" style="display: inline-block;">
@if (trim($slot) === 'EverestEducation')
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
Everest Education
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
