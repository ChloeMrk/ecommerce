@extend('layout')

@section('contenu')

<form action="/inscription" method="post">
    {{csrf_field()}}

    <input type="email" name="email" placeholder="Email" value={{old('email')}}>

        @if($errors->has('email'))

            <p>Email is mandatory</p>
            <p>{{$errors->first('email')}}</p>

        @endif

    <input type="string" name="name" placeholder="Name" value={{old('name')}}>

        @if($errors->has('name'))
            <p>Name is mandatory</p>
        @endif

    <input type="string" name="surname" placeholder="Surname" value={{old('surname')}}>

        @if($errors->has('surname'))
            <p>Surname is mandatory</p>
        @endif
    
    <input type="password" name="password" placeholder="Password">

        @if($errors->has('password'))
            <p>Password is mandatory</p>
        @endif

    <input type="password" name="password_confirmation" id="Confirmation">

        @if($errors->has('password_confirmation'))
            <p>Password is not correct</p>
        @endif

    <input type="date" name="birthday" id="birthday">

        @if($errors->has('birthday'))
            <p>Date not correct</p>
        @endif

    <input type="submit" value="Valider">
</form>

@endsection