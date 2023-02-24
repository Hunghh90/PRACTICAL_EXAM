<h1>Create Student</h1>
<form action="{{url("/create")}}" method="post">
    @csrf
    @include("form.input",[
    "label"=>"Student Name",
    "key"=>"name",
    "type"=>"text",
    "required"=>true
])
 @include("form.input",[
    "label"=>"Student Age",
    "key"=>"age",
    "type"=>"number",
    "required"=>true
])
 @include("form.input",[
    "label"=>"Student Address",
    "key"=>"address",
    "type"=>"text",
    "required"=>true
])
 @include("form.input",[
    "label"=>"Student Telephone",
    "key"=>"telephone",
    "type"=>"text",
    "required"=>true
])
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
