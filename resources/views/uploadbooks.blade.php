<center>
<div class="form">

    <h1 >Upload Image</h1>
    
    <form action="uploadbooks" method="POST" enctype="multipart/form-data" >
    @csrf
    <b>Upload Book Image</b>
    <br><br>
    <input type="file" name="imgRes">
    <br><br>
    <b>Upload Book Pdf</b>
    <br><br>
    <input type="file" name="pdfRes">
    <br><br>
    <input type="text" name="title" placeholder="Enter Book Title">
    <br><br>
    <input type="text" name="category" placeholder="Enter Your Book Category">
    <br><br>
    <input type="text" name="email" placeholder="Enter Your Email">
    <br><br>
    <button type="submit" name="uploadbutton">Upload</button>

    </form>
    </div>
    </center>
<style>

.form
{
    border-style: outset;
    width: 300px;
    padding: 50px;
    
}
</style>
