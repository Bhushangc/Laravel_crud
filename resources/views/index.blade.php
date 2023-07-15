<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form method="post" action="{{route('crud.store')}}">
        @csrf
        <button type="submit">Add new</button><br>
        <input type="text" id="child_first_name" name="child_first_name" placeholder="Child First Name" required>
        @error('child_first_name')
            {{$message}}
        @enderror
        <input type="text" id="child_middle_name" name="child_middle_name" placeholder="Child Middle Name"required>
        @error('child_middle_name')
            {{$message}}
        @enderror
        <input type="text" id="child_last_name" name="child_last_name" placeholder="Child Last Name"required>
        @error('child_last_name')
            {{$message}}
        @enderror
        <input type="number" id="child_age" name="child_age" placeholder="Child Age"required>
        @error('child_age')
            {{$message}}
        @enderror
        <select id="gender" name="gender" placeholder="Gender">
            <option disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Femal">Female</option>
            <option value="Other">Other</option>
        </select>
        @error('gender')
            {{$message}}
        @enderror
        <label for="different_address">Different address?</label>
        <input type="checkbox" id="different_address" name="different_address">
        <input type="text" id="child_address" name="child_address" placeholder="child address" disabled required>
        @error('child_address')
            {{$message}}
        @enderror
        <input type="text" id="child_city" name="child_city" placeholder="Child City" disabled required>
        @error('child_city')
            {{$message}}
        @enderror
        <input type="text" id="child_state" name="child_state" placeholder="Child State" disabled required>
        @error('child_state')
            {{$message}}
        @enderror
        <select  id="country" name="country" disabled>
            <option value="United States" selected>United States</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="France">France</option>
            <option value="United Kingdom" >United Kingdom</option>
        </select>
        <input type="number" id="child_zip" name="child_zip" placeholder="Child Zip Code" disabled required>
        @error('child_zip')
            {{$message}}
        @enderror
        </form>

    <table border="1">
        <tr>
            <td>Delete</td>
            <td>Child First Name</td>
            <td>Child Middle Name</td>
            <td>Child Last Name</td>
            <td>Child Age</td>
            <td>Child Gender</td>
            <td>Child Address</td>
            <td>Child City</td>
            <td>Child State</td>
            <td>Country</td>
            <td>Child Zip Address</td>
        </tr>
        
>
<?php
    use App\Models\Crud;
    $Crud = Crud::all();
?>
            @foreach($Crud as $database)
            <tr>
                <td>
                    <Form method="post"  action=" {{ route('crud.destroy',$database->id) }}" >
                        @csrf
                        @method('Delete')
                       
                        
                        <button type="submit">Delete</button><br>
                    </Form>
                </td>
                <td>{{$database->child_first_name}}</td>
                <td>{{$database->child_middle_name}}</td>
                <td>{{$database->child_last_name}}</td>
                <td>{{$database->child_age}}</td>
                <td>{{$database->gender}}</td>
                <td>{{$database->child_address}}</td>
                <td>{{$database->child_city}}</td>
                <td>{{$database->child_state}}</td>
                <td>{{$database->country}}</td>
                <td>{{$database->child_zip}}</td>
            </tr>
            @endforeach
        
    </table>

        <script>
            document.getElementById('different_address').onchange = function() {
            document.getElementById('child_address').disabled = !this.checked;
            document.getElementById('child_city').disabled = !this.checked;
            document.getElementById('child_state').disabled = !this.checked;
            document.getElementById('country').disabled = !this.checked;
            document.getElementById('child_zip').disabled = !this.checked;
            };
        </script>
    
</body>
</html>