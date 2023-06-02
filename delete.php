<!-- You can create a delete button in HTML with a prompt to confirm the deletion and redirect to delete.php where the delete algorithm is implemented. Here's an example -->
<!-- HTML delete button -->

<!--Delete Record Button-->
<button class="btn btn-danger border rounded" type="submit" style="margin-right: 5px;" name="delete_extension" onclick="deleteConfirmation()"><i class="fa fa-trash"></i> Delete</button>

<!-- HTML delete button -->
<script type="text/javascript">
    // Function to handle the delete confirmation
    function deleteConfirmation() {
        if (confirm("Are you sure you want to delete?")) {
            window.location.href = "edit_algo.php";
        }
    }
</script>

<!--End Delete Record Button-->