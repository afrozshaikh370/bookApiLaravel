<div class="myDiv">
<H1>Show Data</H1>

<table border="1" class="table">
    <tr align="center">
        <td><b>email</b></td>
        <td><b>title</b></td>
        <td><b>category</b></td>
        <td><b>imgRes</b></td>
        <td><b>pdfRes</b></td>
        
    </tr>

    @foreach ($collection as $booksimg)
    <tr>
        <td>{{$books['email']}}</td>
        <td>{{$books['title']}}</td>
        <td>{{$books['category']}}</td>
        <td><img src="{{asset($books->imgRes)}}" height="100px" width="100px"/></td>
        <td>{{$books['pdfRes']}}</td>
        
    </tr>
    @endforeach
</table>
</div>

<style>
.myDiv {
    margin: 30px;
    text-align: center;
    border: 1px outset #595959;
    background-color: white;
}
.table{
    margin: 30px;
    margin-left: auto;
    margin-right: auto;
}
</style>
