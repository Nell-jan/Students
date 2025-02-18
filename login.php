<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>User Dashboard</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/create_event.html">Create New Event</a></li>
                <li><a href="/logout.html">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>My Created Events</h2>
            <div id="my-created-events">
                <!-- List of events the user has created will be dynamically loaded here -->
            </div>
        </section>

        <section>
            <h2>Events I'm Attending</h2>
            <div id="attending-events">
                <!-- List of events the user has RSVP'd to attend -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Event Management System</p>
    </footer>

    <script src="js/dashboard.js"></script>
</body>
</html>
