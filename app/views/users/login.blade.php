<section class="row">
    <article class="col-md-5 col-md-offset-3">

        {{ Form::open(array('url'=>'users/login', 'role' => 'form')) }}

        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

            <div class="form-group">
                <label for="username">Username</label>
                {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Susie59')) }}
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'*****')) }}
            </div>
            {{ Form::submit('Login', array('class'=>'btn btn-default btn-large btn-block'))}}
        {{ Form::close() }}
    </article>
</section>