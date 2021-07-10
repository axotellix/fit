
<div class="component edit w-80 center-x">

    <!-- [ section heading ] -->
    <h3 class = 'mb-50'>ADD CREW MEMBER</h3>

    {{-- add form --}}
    @include('Layouts.layout_form', [
        'submit' => 'SAVE',
        'action' => '/admin/crew/add',
        'method' => 'POST',

        'title_1'  => 'ENTER PERSONAL INFO',
        'fields' => [

            // first name
            [
                'type'          => 'text',
                'name'          => 'first_name',
                'placeholder'   => 'FIRST NAME ...',
                'required'      => true
            ],

            // second name
            [
                'type'          => 'text',
                'name'          => 'second_name',
                'placeholder'   => 'SECOND NAME ...',
                'required'      => true
            ],
            
            // email
            [
                'type'          => 'text',
                'name'          => 'age',
                'placeholder'   => 'AGE ...',
                'required'      => true
            ],
        ],
        't_areas' => [

            // description
            [
                'type'          => 'text',
                'name'          => 'description',
                'placeholder'   => 'DESCRIPTION ...',
                'required'      => true,
                'value'         => ''
            ],
        ]
    ])
</div>