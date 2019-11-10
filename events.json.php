{
	"success": 1,
	"result": [
		{
			"id": "293",
			"title": "This is warning class event with very long title to check how it fits to evet in day view",
			"url": "http://www.example.com/",
			"class": "event-warning",
			"start": "1362938400000",
			"end":   "1363197686300"
		},
		{
			"id": "256",
			"title": "Event that ends on timeline",
			"url": "http://www.example.com/",
			"class": "event-warning",
			"start": "1363155300000",
			"end":   "1363227600000"
		},
		{
			"id": "276",
			"title": "Short day event",
			"url": "http://www.example.com/",
			"class": "event-success",
			"start": "1363245600000",
			"end":   "1363252200000"
		},
		{
			"id": "294",
			"title": "This is information class ",
			"url": "http://www.example.com/",
			"class": "event-info",
			"start": "1363111200000",
			"end":   "1363284086400"
		},
		{
			"id": "297",
			"title": "This is success event",
			"url": "http://www.example.com/",
			"class": "event-success",
			"start": "1363234500000",
			"end":   "1363284062400"
		},
		{
			"id": "54",
			"title": "This is simple event",
			"url": "http://www.example.com/",
			"class": "",
			"start": "1363712400000",
			"end":   "1363716086400"
		},
		{
			"id": "532",
			"title": "This is inverse event",
			"url": "http://www.example.com/",
			"class": "event-inverse",
			"start": "1364407200000",
			"end":   "1364493686400"
		},
		{
			"id": "548",
			"title": "This is special event",
			"url": "http://www.example.com/",
			"class": "event-special",
			"start": "1363197600000",
			"end":   "1363629686400"
		},
		{
			"id": "295",
			"title": "Event 3",
			"url": "http://www.example.com/",
			"class": "event-important",
			"start": "1364320800000",
			"end":   "1364407286400"
		}
	]
}

<!-- To get this data(title of the event, url, startDate of the event, End Date of the event) from the databse you can use the following code as well. It will be commented. If you wish to do it like this use the following code.  It is a PHP code-->

<!-- <?php
	/*$db = ''; //!!!!----name of the database----!!!!
	$username = '';
	$password = '';
	$host = 'localhost';
	$mysqli = new mysqli($host, $username, $password, $db);
	$mysqli->query("SET NAMES 'utf8'");

	if ($mysqli->connect_errno) 
	{
		echo "Error de conexion: (" . $mysqli->connect_errno .") " . $mysqli->connect_error;
	}

    $sqlEvents = "SELECT * FROM <tableName> LIMIT 20";
   
    $sql = $mysqli->query($sqlEvents);
    while($row = $sql->fetch_array(MYSQLI_ASSOC)){
        $start = strtotime($row['start_date']) * 1000;
        $end = strtotime($row['end_date']) * 1000; 
        $description = $row['description'];
        $name = $row['title'];
        $title = $name.' Starts: '.$row['start_date'].', Ends: '.$row['end_date'].' -- Brief Discription: '.$description;
        $calendar[] = Array(
            'id' =>$row['id'],
            'title' => "$title",
            'url' => "#",
            "class" => 'event-important',     //!!!!----this can also be taken from the databse----!!!!
            'start' => "$start",
            'end' => "$end"
        );
    }
    $calendarData = Array(
    	"success" => 1,	
        "result"=>$calendar);
    echo json_encode($calendarData);
    exit;*/
?> -->
