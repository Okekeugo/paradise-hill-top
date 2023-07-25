<x-mail::message>
# New Entry for Paradise Hilltop Academy

A form on paradise Hilltop Creche has been filled 

Below are the information provided:

Client Name: {{ $data['name'] }}

Client Last Name: {{ $data['lastname'] }}

Client Email: {{ $data['email'] }}

Enquiry Type: {{ $data['enquiry_type'] }}


{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ env('SCHOOL_NAME', 'PARADISE HILLTOP ACADEMY') }}
</x-mail::message>
