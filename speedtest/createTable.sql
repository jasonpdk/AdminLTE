CREATE TABLE speeds(
	start_time TEXT NOT NULL, 
	end_time TEXT NOT NULL, 
	from_isp TEXT NOT NULL, 
	from_ip TEXT NOT NULL, 
	server TEXT NOT NULL, 
	server_distance REAL NOT NULL, 
	ping REAL NOT NULL, 
	download REAL NOT NULL, 
	upload REAL NOT NULL, 
	image_url TEXT NOT NULL
);
