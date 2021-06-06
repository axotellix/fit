
<!-- [ FORM ] -->
<form action="{{ $action ?? '' }}" method = '{{ $method ?? '' }}'>
    @csrf

    @if( $alt_method ?? false )
        {{ $alt_method }}
    @endif


    @if( $title_1 ?? false )
        <h5>{{ $title_1 }}</h5>
    @endif

    @foreach( $fields as $field )

        @php( $field = (object) $field )
        <input 
            type         = "{{ $field->type ?? 'text'        }}" 
            name         = "{{ $field->name ?? ''            }}" 
            id           = "{{ $field->id ?? ''              }}" 
            title        = "{{ $field->title ?? ''           }}" 
            placeholder  = "{{ $field->placeholder ?? ''     }}"
            autocomplete = "{{ $field->autocomplete ?? 'off' }}"
            @if(($field->required ?? false) === true)
                required
            @endif
        />

    @endforeach


    @if( $title_2 ?? false )
        <h5>{{ $title_2 }}</h5>
    @endif

    @if( $remark ?? false )
        <span class = 'remark'>{!! nl2br($remark) !!}</span>
    @endif

    @if( $credit ?? false )

        <div class="credit-card">

            <!-- card section: chip & company -->
            <div class="signs">
                <div class="chip"></div>
                <span class = 'company'>VISA</span>
            </div>

            <!-- card section: card number -->
            <div class="card-number">
                <label for="card-number">CARD NUMBER</label>
                <input type="text" name = 'card-number' placeholder = 'oooo oooo oooo oooo' class = 'digit' required>
            </div>

            <!-- card section: card holder, expired data & CVC -->
            <div class="extra-data">
                <div class="card-holder">
                    <label for="card-holder">CARD HOLDER</label>
                    <input type="text" name = 'card-holder' placeholder = 'JOHN DOE' required>
                </div>
                <div class="expired-data">
                    <label for="expired-data">EXPIRED DATA</label>
                    <input type="text" name = 'expired-data' placeholder = '00 / 21' required>
                </div>
                <div class="cvc">
                    <label for="cvc">CVC</label>
                    <input type="password" name = 'cvc' placeholder = 'ooo' class = 'digit' required>
                </div>
            </div>

        </div>

    @endif




    <button class = 'button'>
        <span>{{ $submit ?? 'SUBMIT' }}</span>
    </button>

</form>