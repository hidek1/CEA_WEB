@extends('dashboard')
@section('content')
<style type="text/css">
fieldset
{
    
    padding:10px;
    display:block;
    clear:both;
    margin:5px 0px;
}

input.add
{
    float:right;
}
input.fieldname
{
    float:left;
    clear:left;
    display:block;
    margin:5px;
}
select.fieldtype
{
    float:left;
    display:block;
    margin:5px;
}
input.remove
{
    float:left;
    display:block;
    margin:5px;
}
#yourform label
{
    float:left;
    clear:left;
    display:block;
    margin:5px;
}
#yourform input, #yourform textarea
{
    float:left;
    display:block;
    margin:5px;
}
</style>
 <div id="page-wrapper">
    @if(Auth::check())
    <div class="row">
        <div class="col-lg-12"><h3 class="page-header">Add Blog</a>
            
        </h3>
        @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{$message}}</strong>
                </div>
                <img src="/images/blog/{{ Session::get('path') }}" style="width:300px;height: 150px;" />
            @endif

            <form action="/blog" class="form-horizontal" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                    <input type="file" name="blog_img"><br />
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                          <label for="comment">Blog:</label>
                          <textarea class="form-control" rows="5" id="comment" name="content"></textarea><br />
                            <fieldset id="buildyourform">
                                <legend></legend>
                            </fieldset>
                            <input type="button" value="Add Subtitle" class="add btn btn-primary" id="add" />
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
                <div class="row">
</div>
            </form>
      </div>
    </div>
    @else
        <div class="row">
            <h3>Please log in first <a href="/main">Log in</a></h3>
            </div>
    @endif
<script type="text/javascript">
    $(document).ready(function() {
    $("#add").click(function() {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        var fName = $("<input type=\"text\" class=\"fieldname form-control\" name=\"subtitle[]\" placeholder =\"Subtitle\"/>");
        var fsub_img = $("<input type=\"file\" class=\"fieldname \" name=\"sub_img[]\" placeholder =\"Sub img\"/>");
        var fsub_con = $("<textarea class=\"fieldname form-control\" name=\"sub_content[]\" rows=\"5\" placeholder =\"Sub Content\"/></textarea>");
        var removeButton = $("<input type=\"button\" class=\"remove\" value=\"remove\" />");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(fsub_img);
        fieldWrapper.append(fsub_con);
        fieldWrapper.append(removeButton);
        $("#buildyourform").append(fieldWrapper);
    });
    $("#preview").click(function() {
        $("#yourform").remove();
        var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
            var input;
            switch ($(this).find("select.fieldtype").first().val()) {
                case "checkbox":
                    input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textbox":
                    input = $("<input type=\"text\" id=\"" + id + "\" name=\"subtitle" + id + "\" />");
                    break;
                case "textarea":
                    input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                    break;    
            }
            fieldSet.append(label);
            fieldSet.append(input);
        });
        $("body").append(fieldSet);
    });
});
</script>
 </div>
@endsection