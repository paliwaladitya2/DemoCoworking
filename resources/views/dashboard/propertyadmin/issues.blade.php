<!DOCTYPE html>
<html>
<head>
    <title>Issue Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/its.png" width="75" height="30" class="d-inline-block align-top" alt="Logo">
            ITS CoDesk
        </a>
        
        <!-- Logout Option -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('logout') }}">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <h1>Issue Portal</h1>
        
        <!-- Issue Submission Form -->
        <form id="issueForm">
            <div class="form-group">
                <label for="issueTitle">Issue Title</label>
                <input type="text" class="form-control" id="issueTitle" name="issueTitle" required>
            </div>
            <div class="form-group">
                <label for="issueDescription">Issue Description</label>
                <textarea class="form-control" id="issueDescription" name="issueDescription" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Issue</button>
        </form>
        
        <hr>
        
        <!-- Existing Issues -->
        <div id="issueList"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
    const issueForm = $('#issueForm');
    const issueList = $('#issueList');

    issueForm.submit(function(event) {
        event.preventDefault();

        const issueTitle = $('#issueTitle').val();
        const issueDescription = $('#issueDescription').val();

        // You can send the data to a server using AJAX or other methods
        // For simplicity, we'll just add the issue to the list on the client side
        const newIssue = `
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">${issueTitle}</h5>
                    <p class="card-text">${issueDescription}</p>
                </div>
            </div>
        `;

        issueList.prepend(newIssue);

        // Show a success alert
        Swal.fire('Issue Submitted', 'Your issue has been submitted successfully!', 'success');

        // Clear the form
        issueForm[0].reset();
    });
});

    </script>
</body>
</html>
