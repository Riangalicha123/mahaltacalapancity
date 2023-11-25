<!-- App/Views/room/index.php -->

<h2>Room List</h2>

<table border="1">
    <thead>
        <tr>
            <th>Room Number</th>
            <th>Room Type</th>
            <th>Price</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        <!-- Loop through your room data and display it in the table -->
        <?php foreach ($rooms as $room): ?>
            <tr>
                <td><?= $room['room_number']; ?></td>
                <td><?= $room['room_type']; ?></td>
                <td><?= $room['price']; ?></td>
                <!-- Add more columns as needed -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
