@extends("front.app")
@section("content")

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5 p-3">
    <!-- Header -->
    <div class="text-center mb-4">
      <h1 class="display-5">Notifications</h1>
      <p class="text-muted">Stay updated with the latest alerts and updates</p>
    </div>

    <!-- Notifications List -->
    <div class="list-group">
      <!-- Notification 1 -->
      <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-1">New Message Received</h5>
          <p class="mb-0 text-muted">You have a new message from John Doe</p>
        </div>
        <small class="text-muted">5 mins ago</small>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional for components like modals, dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection