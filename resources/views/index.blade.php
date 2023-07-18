<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <h1 class="display-5">Add new</h1>
    <div class="check">
    </div>
    <table border="1" class="table table-hover ">
       <thead> 
            <tr>
                <td>Action</td>
                <td>Child First Name</td>
                <td>Child Middle Name</td>
                <td>Child Last Name</td>
                <td>Child Age</td>
                <td>Child Gender</td>
                <td>Different address</td>
                <td>Child Address</td>
                <td>Child City</td>
                <td>Child State</td>
                <td>Country</td>
                <td>Child Zip Address</td>
            </tr>
       </thead>
        <tr>
            <form method="post" action="{{route('crud.store')}}">
                @csrf
                <td><button type="submit" class="btn btn-primary">Save</button></td>
                <td> <input type="text" id="child_first_name" name="child_first_name" placeholder="Child First Name" required></td>
                <td> <input type="text" id="child_middle_name" name="child_middle_name" placeholder="Child Middle Name"required></td>
                <td> <input type="text" id="child_last_name" name="child_last_name" placeholder="Child Last Name"required> </td>
                <td> <input type="number" id="child_age" name="child_age" placeholder="Child Age"required></td>
                <td> <select id="gender" name="gender" placeholder="Gender">
                    <option disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Femal">Female</option>
                    <option value="Other">Other</option>
                </select></td>
                <td> <label for="different_address">Different address?</label>
                <input type="checkbox" id="different_address" name="different_address"> </td>
                <td> <input type="text" id="child_address" name="child_address" placeholder="child address" disabled></td>
                <td>  <input type="text" id="child_city" name="child_city" placeholder="Child City" disabled></td>
                <td> <input type="text" id="child_state" name="child_state" placeholder="Child State" disabled></td>
                <td><select  id="country" name="country" disabled>
                    <option value="United States" selected>United States</option>
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="United Kingdom" >United Kingdom</option>
                </select> </td>
                <td> <input type="number" id="child_zip" name="child_zip" placeholder="Child Zip Code" disabled> </td>
            </form>

        </tr>
    
        

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
                    
                    
                    <button type="submit" class="btn btn-danger">Delete</button><br>
                </Form>
            </td>
            <td>{{$database->child_first_name}}</td>
            <td>{{$database->child_middle_name}}</td>
            <td>{{$database->child_last_name}}</td>
            <td>{{$database->child_age}}</td>
            <td>{{$database->gender}}</td>
            <td></td>
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