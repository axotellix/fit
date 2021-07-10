
<div class="component edit w-80 ml-50">
    
    {{-- button: delete crew --}}
    <form action="/admin/crew/delete/{{ $member_data->trainer_id }}" method = 'POST'>
        @csrf
        @method('DELETE')

        <button href="/admin/crew/delete/{{ $member_data->trainer_id }}" class = 'button button-red'>
            <span>DELETE MEMBER</span>
        </button>   
    </form>

    {{-- edit form --}}
    @include('Layouts.layout_form', [
        'submit' => 'SAVE',
        'action' => '/admin/crew/edit/' . $member_data->trainer_id,
        'method' => 'POST',

        'title_1'  => 'EDIT PERSONAL INFO',
        'fields' => [

            // first name
            [
                'type'          => 'text',
                'name'          => 'first_name',
                'placeholder'   => 'FIRST NAME ...',
                'value'         => $member_data->first_name,
                'required'      => true
            ],

            // second name
            [
                'type'          => 'text',
                'name'          => 'second_name',
                'placeholder'   => 'SECOND NAME ...',
                'value'         => $member_data->second_name,
                'required'      => true
            ],
            
            // email
            [
                'type'          => 'text',
                'name'          => 'age',
                'placeholder'   => 'AGE ...',
                'value'         => $member_data->age,
                'required'      => true
            ],
        ],
        't_areas' => [

            // description
            [
                'type'          => 'text',
                'name'          => 'description',
                'placeholder'   => 'DESCRIPTION ...',
                'value'         => $member_data->description,
                'required'      => true
            ],
        ]
    ])
    
    {{-- crew photo --}}
    
    
</div>
    