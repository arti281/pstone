@component('mail::message')
# New Contact Message

**Name:** {{ $contact->name }}

**Email:** {{ $contact->email }}

**Mobile:** {{ $contact->phone }}

**Message:**  
{{ $contact->message }}

Thanks,<br>
{{ $contact->name }}
@endcomponent