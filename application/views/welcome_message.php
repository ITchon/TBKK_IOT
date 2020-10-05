<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter multiple drag and drop image upload</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>
<div class="columns large-19 medium-9 small-12">
    <form action="/admin/images/upload"
          enctype="multipart/form-data"
          method="post"
          class="dropzone"
          id="my-awesome-dropzone">
          </form>
</div>
<script src="/skin/js/dropzone.js"></script>

