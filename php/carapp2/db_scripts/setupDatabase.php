<?php

include ("C:/xampp/htdocs/carapp2/db_scripts/dbConfig.php");
//Create Database

$inventory = "inventory";

/* Create table doesn't return a resultset */
if ($mysqli->query("CREATE DATABASE IF NOT EXISTS if0_38362188_jazzytiger2"))
{
    echo "<p>Database cars created</P>";
}
else
{
    echo "Had trouble with this SQL: CREATE DATABASE IF NOT EXISTS if0_38362188_jazzytiger2";
}

$mysqli->select_db("if0_38362188_jazzytiger2");
   Echo ("Selected the jazzytiger2 database. ");

$query = " CREATE TABLE IF NOT EXISTS logins 
( user_name varchar(17) PRIMARY KEY, passwrd varchar(50), first_name varchar(50), last_name varchar(50))";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'Logins' created</P>";
}
else
{
    echo "<p>Error: </p>" . $mysqli->error;
} 

$query = " CREATE TABLE IF NOT EXISTS inventory 
( VIN varchar(17) PRIMARY KEY, YEAR INT, Make varchar(50), Model varchar(100), 
TRIM varchar(50), EXT_COLOR varchar (50), INT_COLOR varchar (50), ASKING_PRICE DECIMAL (10,2), 
SALE_PRICE DECIMAL (10,2), PURCHASE_PRICE DECIMAL (10,2), MILEAGE int, TRANSMISSION varchar (50), 
PURCHASE_DATE DATE, SALE_DATE DATE)";
//echo "<p>***********</p>";
//echo $query ;
//echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'INVENTORY' created</P>";
}
else
{
    echo "<p>Error: </p>" . $mysqli->error;
} 
// Dates are stored in MySQL as 'YYYY-MM-DD' format
$query = "INSERT IGNORE INTO `inventory` 
(`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`) 
VALUES 
('5FNYF4H91CB054036', '2012', 'Honda', 'Pilot', 'Touring', 'White Diamond Pearl', 'Leather', '37807', NULL, '34250', '7076', 'Automatic', '2012-11-08', NULL);";


if ($mysqli->query($query) === TRUE) {
    echo "<p>Honda Pilot inserted into inventory table. </p>";
}
else
{
    echo "<p>Error inserting Honda Pilot: </p>" . $mysqli->error;
    echo "<p>***********</p>";
    echo $query ;
    echo "<p>***********</p>";
}

// Insert a Dodge Durango

$query = "INSERT IGNORE INTO `inventory` (`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`) 
VALUES 
('LAKSDFJ234LASKRF2', '2009', 'Dodge', 'Durango', 'SLT', 'Silver', 'Black', '2700', NULL, '2000', '144000', '4WD Automatic', '2012-12-05', NULL);";


if ($mysqli->query($query) === TRUE) {
    echo "<p>Dodge Durango inserted into inventory table.</p>";
}
else
{
    echo "<p>Error Inserting Dodge: </p>" . $mysqli->error;
    echo "<p>***********</p>";
    echo $query ;
    echo "<p>***********</p>";
}

$query3 = "INSERT IGNORE INTO `inventory` (`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`)
 VALUES
('1FAFP44423F44657', 2003, 'Ford', 'Mustang', 'Base', 'Silver / Black', 'Gray', 8995, NULL, 6746, 75820, 'Automatic', '2013-01-14', NULL),
('2G1WD58C47917903', 2007, 'Chevrolet', 'Impala', 'SS', 'Gray', 'Gray', 9995.00, NULL, 7496, 129108, '4-Speed Automatic', '2013-01-14', NULL),
('19UUA56682A036203', 2002, 'Acura', 'TL', 'Base', 'Blue', 'Tan', 7995.00, NULL, 5996, 77442, '5-Speed Automatic', '2013-01-14', NULL),
('1B3EL46J25N513802', 2005, 'Dodge', 'Stratus', 'SXT', 'Blue', 'Gray', 7995.00, NULL, 5996, 41941, '4-Speed Automatic', '2013-01-14', NULL),
('1FAHP36N09W191342', 2009, 'Ford', 'Focus', 'SES', 'Red', 'Gray', 9670.00, NULL, 7252, 47000, 'Automatic', '2013-01-14', NULL),
('1G1JH12FX57138124', 2005, 'Chevrolet', 'Cavalier', 'LS Sport', 'Yellow', 'Gray', 9995, NULL, 7596.00, 15828, '5-Speed Manual', '2013-01-14', NULL),
('1G1ZU54814F248763', 2004, 'Chevrolet', 'Malibu', 'LT', 'Black', 'Gray', 8995.00, NULL, 6746, 41135, '4-Speed Automatic', '2013-01-14', NULL),
('1G6EL5780FE603440', 1985, 'Cadillac', 'Eldorado', 'Base', 'Pewter', 'Tan', 7995.00, NULL, 5996, 32880, 'UNSPECIFIED', '2013-01-14', NULL),
('1G8JD54R05Y503397', 2005, 'Saturn', 'L300', 'Base', 'Silver', 'Grey', 8888.00, NULL, 6666, 35751, '4-Speed Automatic', '2013-01-14', NULL),
('2HKYF18567H525598', 2007, 'Honda', 'Pilot', 'EX-L', 'Aberdeen Green Metallic', 'Gray', 14500, NULL, 10875.00, 86200, '5-Speed Automatic', '2013-01-14', NULL),
('3A4FY48B27T554499', 2007, 'Chrysler', 'PT Cruiser', 'Base', 'Purple', 'Gray', 7995.00, NULL, 5996, 41981, 'Manual', '2013-01-14', NULL),
('3FAHP01159R137525', 2009, 'Ford', 'Fusion', 'SE', 'Vapor Silver', 'Camel', 9495.00, NULL, 7124, 107532, '6-Speed Automatic', '2013-01-14', NULL),
('3GNFK16T71G208523', 2001, 'Chevrolet', 'Suburban', 'LT', 'Black Onyx', 'Tan Neutral', 7995, NULL, 5996.25, 116305, '4-Speed Automatic', '2013-01-14', NULL),
('5FNRL38477B091190', 2007, 'Honda', 'Oddyssey', 'EX', 'Slate Green Metallic', 'Gray', 10000, NULL, 7500.00, 99555, '5-Speed Automatic', '2013-01-14', NULL),
('5FNYF4H91CB052346', 2012, 'Honda', 'Pilot', 'Touring', 'White Diamond Pearl', 'Leather', 37807, NULL, 34250.00, 7076, 'Automatic', '2012-11-08', NULL),
('5J6YH28307L014151', 2007, 'Honda', 'Element', 'LX', 'Silver', 'Gray', 8995.00, NULL, 6746, 111000, 'Automatic', '2013-01-14', NULL),
('JHLRD77802C069548', 2002, 'Honda', 'CR-V', 'EX', 'Blue', 'Black', 6995.00, NULL, 5246, 105139, '5-Speed Manual', '2013-01-14', NULL),
('JTLKE50E481060621', 2008, 'Scion', 'xB', 'Base', 'Black Sand Pearl', 'Dark Gray', 9999, NULL, 7499.00, 65146, 'Automatic', '2013-01-14', NULL),
('KMHDU46DX7U184501', 2007, 'Hyundai', 'Elantra', 'SE', 'Seattle Blue', 'Gray', 999, NULL, 7497.00, 41560, '5-Speed Manual', '2013-01-14', NULL),
('KNAGE228795310609', 2009, 'Kia', 'Optima', 'Base', 'Ruby Red', 'Beige', 10000, NULL, 7500.00, 56749, '5-Speed Automatic', '2013-01-14', NULL),
('LAKSDFJ234ZASKRF2', 2009, 'Dodge', 'Durango', 'SLT', 'Silver', 'Black', 2700, NULL, 2000.00, 144000, '4WD Automatic', '2012-12-05', NULL),
('WBAEU33434PR12965', 2004, 'BMW', '325', 'xi', 'Silver', 'Black', 9650, NULL, 7237.50, 98208, 'Automatic', '2013-01-14', NULL),
('WDBJF65J71B215984', 2001, 'Mercedes-Benz', 'E320', 'Base', 'Silver', 'Gray', 9900, NULL, 7425.00, 40902, '5-Speed Automatic', '2013-01-14', NULL),
('WDBRF87HX6F757914', 2006, 'Mercedes-Benz', 'C350 4Matic', 'Luxury', 'Black', 'Black', 14450, NULL, 10837.50, 82000, '5-Speed Automatic', '2013-01-14', NULL),
('WMEEK31X79K226939', 2009, 'Smart', 'ForTwo', 'Passion', 'Silver', 'Design Black', 8988, NULL, 6741.00, 23272, '5-Speed Automatic with Auto-Shift', '2013-01-14', NULL),
('WMWRC334X4TJ61214', 2004, 'MINI', 'Cooper', 'Base', 'Jet Black', 'Black', 9499, NULL, 7124.25, 59160, 'Automatic', '2013-01-14', NULL),
('YS3DF75K627015298', 2002, 'Saab', '9-3', 'SE', 'Sand', 'Tan', 8495.00, NULL, 6371, 48499, '5-speed Manual', '2013-01-14', NULL),
('YV1MJ682152063198', 2005, 'Volvo', 'V50', 'T5', 'Blue', 'Black', 8995.00, NULL, 6746, 110354, 'Automatic', '2013-01-14', NULL),
('YV4SZ592561219696', 2006, 'Volvo', 'XC70', 'AWD', 'Willow Green Metallic', 'Taupe Leather', 14996, NULL, 11247, 83664, '5-Speed Automatic w/ Geartronic', '2013-01-14', NULL),
('X29SU9L7GLPK41L26', 2019, 'Hyundai', 'Tucson', 'Sport', 'Brown', 'Black', 13245, NULL, 10254, 65872, 'AWD Automatic', '2012-06-03', NULL),
('1GY6S5Y627STK37F5', 2012, 'Chevrolet', 'Silverado', 'Touring', 'White', 'Brown', 4514, NULL, 3257, 93575, '4WD Automatic', '2016-03-07', NULL),
('TWGMK0X49HMV35R31', 2021, 'Hyundai', 'Santa Fe', 'Base', 'Silver', 'Black', 5711, NULL, 4282, 91407, 'FWD Automatic', '2024-05-02', NULL),
('8JLWGG28JYBNVZX63', 2006, 'Chevrolet', 'Malibu', 'Touring', 'Beige', 'Black', 20759, NULL, 12963, 83126, 'AWD Automatic', '2015-10-31', NULL),
('DSUS3P366UHLM0WNC', 2020, 'Toyota', 'Tacoma', 'Touring', 'Black', 'Black', 11542, NULL, 8799, 86198, 'RWD Automatic', '2016-08-07', NULL),
('AR8YALNB2RUPCDK89', 2005, 'Nissan', 'Frontier', 'SLT', 'White', 'Tan', 6637, NULL, 4371, 187243, 'AWD Automatic', '2018-09-04', NULL),
('D31RYXZCXT7PU2UZ4', 2017, 'Toyota', 'RAV4', 'SLT', 'Silver', 'Black', 12176, NULL, 8565, 93410, '4WD Automatic', '2010-10-07', NULL),
('JKCM6NKB6W9C7XASD', 2006, 'Honda', 'Civic', 'LX', 'Beige', 'Brown', 16917, NULL, 14170, 42139, 'FWD Automatic', '2023-08-08', NULL),
('HHM4VR1AWKRL6327Z', 2007, 'Volkswagen', 'Jetta', 'Limited', 'Silver', 'Beige', 3438, NULL, 2329, 74152, 'AWD Automatic', '2016-02-21', NULL),
('S4TAETF8BH4B0S2VB', 2013, 'Dodge', 'Ram 1500', 'Sport', 'Red', 'Gray', 24260, NULL, 18113, 106542, 'FWD Automatic', '2010-12-15', NULL),
('XPJS9U7H47TEKRAJ0', 2011, 'Honda', 'CR-V', 'EX', 'Red', 'Black', 23509, NULL, 19919, 72361, '4WD Automatic', '2015-07-09', NULL),
('6543JWYJE6C5H55M1', 2018, 'Hyundai', 'Tucson', 'Touring', 'Gray', 'Gray', 5968, NULL, 4153, 108080, 'AWD Automatic', '2017-07-11', NULL),
('BNH8DP3Y6GX60TYG2', 2021, 'Volkswagen', 'Golf', 'Base', 'Brown', 'Brown', 17683, NULL, 10701, 189721, '4WD Automatic', '2020-04-19', NULL),
('L6M7NCZZW9YBADBJY', 2009, 'Volkswagen', 'Tiguan', 'EX', 'Green', 'Beige', 4252, NULL, 3453, 161160, '4WD Automatic', '2020-12-15', NULL),
('A4UXEPZGRUADHWD7E', 2007, 'Kia', 'Soul', 'LX', 'Red', 'Tan', '12806', NULL, 8325, 102688, 'AWD Automatic', '2020-03-20', NULL),
('7R6ZUCUN35D0KFEYZ', 2009, 'Jeep', 'Wrangler', 'LX', 'Beige', 'Brown', 2692, NULL, 2133, 50743, 'FWD Automatic', '2013-01-13', NULL),
('JJMXFJYV3023FPXFU', 2018, 'Ford', 'F-150', 'Sport', 'White', 'Brown', 7321, NULL, 4434, 170712, 'FWD Automatic', '2018-03-13', NULL),
('7Y3G064F78NKSF0BD', 2014, 'Kia', 'Sportage', 'Base', 'Beige', 'Beige', 5900, NULL, 5102, 112872, '4WD Automatic', '2015-12-30', NULL),
('SGTPCDCT3M7STN7MC', 2014, 'Nissan', 'Altima', 'Limited', 'Green', 'Tan', 9443, NULL, 5806, 134302, 'FWD Automatic', '2016-03-19', NULL),
('BAAAHG6ET16W8T6LG', 2019, 'Toyota', 'RAV4', 'Limited', 'Gray', 'Tan', 8105, NULL, 5317, 111163, 'FWD Automatic', '2011-04-01', NULL),
('NV60D82WT7A87XSCW', 2021, 'Hyundai', 'Tucson', 'Touring', 'Red', 'Black', 19583, NULL, 12559, 172804, 'RWD Automatic', '2010-06-18', NULL),
('TWEH3U5MC09E18HCH', 2006, 'Jeep', 'Wrangler', 'EX', 'Black', 'Gray', 6773, NULL, 5596, 85835, 'FWD Automatic', '2022-03-23', NULL),
('7EG7PMSBP4AZ90VSR', 2017, 'Kia', 'Sorento', 'SEL', 'White', 'Tan', 8723, NULL, 5370, 175468, 'RWD Automatic', '2011-06-16', NULL),
('W2VE8170DVC50LEL9', 2021, 'Dodge', 'Charger', 'S', 'Beige', 'Gray', 6808, NULL, 4669, 174894, 'AWD Automatic', '2011-10-05', NULL),
('7Z88L0MFLG7WUL4D5', 2018, 'Hyundai', 'Tucson', 'SLT', 'Red', 'Beige', 20408, NULL, 17723, 163984, '4WD Automatic', '2010-09-07', NULL),
('UNYTGM9WT9T6H8YCD', 2011, 'Hyundai', 'Santa Fe', 'S', 'Silver', 'Brown', 11650, NULL, 9241, 99603, 'RWD Automatic', '2022-12-30', NULL),
('UAL9KBYR0JBFEFEPR', 2008, 'Ford', 'Fusion', 'EX', 'Green', 'Tan', 7580, NULL, 6058, 183675, 'FWD Automatic', '2014-03-10', NULL),
('CAXFX317Z38J0KCX1', 2006, 'Dodge', 'Charger', 'SE', 'Blue', 'Beige', 21918, NULL, 18083, 48683, '4WD Automatic', '2012-06-08', NULL),
('N81KNE8V4P2CTT6YF', 2021, 'Nissan', 'Sentra', 'Base', 'Silver', 'Black', 13139, NULL, 11823, 87970, 'RWD Automatic', '2020-11-23', NULL),
('3VT3WWMA7YSVZM73S', 2010, 'Chevrolet', 'Malibu', 'EX', 'Silver', 'Black', 6766, NULL, 4423, 79908, '4WD Automatic', '2022-05-17', NULL),
('792FNAMH6Y5NJF9D7', 2014, 'Hyundai', 'Elantra', 'Base', 'Blue', 'Brown', 6765, NULL, 5339, 110548, 'RWD Automatic', '2019-07-28', NULL),
('W32CF3MUXKKUH1FM7', 2015, 'Chevrolet', 'Silverado', 'SEL', 'Beige', 'Black', 2412, NULL, 2074, 36792, '4WD Automatic', '2013-06-27', NULL),
('NV5XDYG79T65P6RZ9', 2020, 'Kia', 'Sportage', 'SLT', 'Gray', 'Beige', 20460, NULL, 17945, 33662, 'RWD Automatic', '2020-02-01', NULL),
('NEDE7W79M6C9SV5MX', 2022, 'Honda', 'Civic', 'EX', 'Silver', 'Brown', 2025, NULL, 1410, 140267, 'RWD Automatic', '2012-05-11', NULL),
('LM26XDUUDNCNRE1SP', 2020, 'Honda', 'Pilot', 'Sport', 'Beige', 'Brown', 18554, NULL, 15537, 142309, 'FWD Automatic', '2011-10-30', NULL),
('NXXVUY6WXCW798GXS', 2006, 'Chevrolet', 'Equinox', 'S', 'Blue', 'Brown', 3074, NULL, 2325, 177461, 'AWD Automatic', '2015-08-17', NULL),
('YDSFU0PACLPVR89MV', 2015, 'Chevrolet', 'Traverse', 'LX', 'Silver', 'Black', 15899, NULL, 9894, 177979, 'RWD Automatic', '2020-12-27', NULL),
('UGUD4EBN0MGYKPD3B', 2015, 'Honda', 'Civic', 'Laredo', 'Gray', 'Gray', 3839, NULL, 2367, 137364, 'AWD Automatic', '2020-11-30', NULL),
('6MBJY7V6A0XA66KJN', 2015, 'Chevrolet', 'Equinox', 'EX', 'Green', 'Gray', 8382, NULL, 5729, 92524, 'AWD Automatic', '2015-03-05', NULL),
('YVDRL11CUTJ1E9H2P', 2019, 'Hyundai', 'Santa Fe', 'S', 'Green', 'Black', 23910, NULL, 19106, 130040, 'RWD Automatic', '2016-03-04', NULL),
('NT31005NZRU4XUY4V', 2013, 'Nissan', 'Sentra', 'Limited', 'Red', 'Beige', 14639, NULL, 12339, 109151, 'RWD Automatic', '2020-08-08', NULL),
('G7YSR75X8ST1U299D', 2017, 'Volkswagen', 'Golf', 'Sport', 'Blue', 'Brown', 12758, NULL, 0719, 85140, 'RWD Automatic', '2021-04-21', NULL),
('9XLGSXEVCKDU4C3E5', 2014, 'Ford', 'Fusion', 'LX', 'Black', 'Brown', 2747, NULL, 2366, 87814, 'RWD Automatic', '2019-09-09', NULL),
('M1WH8Y66VL95N06SU', 2011, 'Jeep', 'Cherokee', 'S', 'Brown', 'Black', 20002, NULL, 12456, 96472, 'FWD Automatic', '2022-05-02', NULL),
('9GNL695M9YN7WP2RV', 2008, 'Honda', 'Accord', 'SE', 'Brown', 'Tan', 9331, NULL, 5952, 63667, 'RWD Automatic', '2023-03-05', NULL),
('1HTBMF84TXNKFZ7L7', 2020, 'Toyota', 'Corolla', 'Limited', 'Beige', 'Brown', 18905, NULL, 15131, 150167, '4WD Automatic', '2017-01-25', NULL),
('UBAS2S9S9JSH39JH7', 2005, 'Jeep', 'Grand Cherokee', 'Laredo', 'Gray', 'Beige', 2766, NULL, 2178, 50737, 'AWD Automatic', '2015-08-18', NULL),
('K9H3KYUWDZR7JKHWD', 2011, 'Ford', 'Fusion', 'SEL', 'Blue', 'Brown', 13598, NULL, 11982, 122726, 'FWD Automatic', '2022-06-26', NULL),
('E3ZYZ13U6KFVNE177', 2020, 'Jeep', 'Cherokee', 'S', 'Red', 'Black', 16881, NULL, 14298, 126532, 'FWD Automatic', '2011-06-13', NULL),
('ERTB5W8XW1JNDUKZU', 2015, 'Hyundai', 'Sonata', 'S', 'Blue', 'Tan', 23875, NULL, 17512, 86262, 'AWD Automatic', '2022-03-23', NULL),
('FEEDXM3GUK7FV79P2', 2012, 'Jeep', 'Cherokee', 'SEL', 'Black', 'Brown', 6296, NULL, 4738, 103928, 'AWD Automatic', '2014-11-07', NULL),
('ZWA9S8PK5Y2SB50U4', 2010, 'Volkswagen', 'Tiguan', 'SE', 'Brown', 'Gray', 16188, NULL, 11367, 67859, 'FWD Automatic', '2020-01-23', NULL),
('D4YAMJ1X2BYU3BANL', 2008, 'Jeep', 'Wrangler', 'SLT', 'Beige', 'Beige', 15970, NULL, 13229, 36781, 'AWD Automatic', '2021-05-10', NULL),
('0M3KHXH7FXB2P7EN1', 2022, 'Nissan', 'Altima', 'SLT', 'Beige', 'Beige', 17951, NULL, 12107, 169032, 'FWD Automatic', '2022-08-15', NULL),
('R4FVCBYGSBN7UYC47', 2007, 'Nissan', 'Frontier', 'S', 'Red', 'Gray', 19317, NULL, 14763, 42675, 'AWD Automatic', '2022-04-24', NULL),
('E804JPRL29FTSMLCK', 2006, 'Nissan', 'Frontier', 'Sport', 'Red', 'Brown', 6728, NULL, 5648, 60013, 'FWD Automatic', '2016-03-20', NULL),
('4VZTU1X77GVPREETR', 2015, 'Kia', 'Sorento', 'Sport', 'Silver', 'Black', 2091, NULL, 1391, 191267, 'RWD Automatic', '2020-11-11', NULL),
('AGS65XV7XE3DM3D3E', 2015, 'Jeep', 'Compass', 'Touring', 'Green', 'Beige', 23554, NULL, 17415, 140849, '4WD Automatic', '2018-12-30', NULL),
('UJ06FW6PYRAV8VGR0', 2011, 'Volkswagen', 'Tiguan', 'LX', 'Brown', 'Brown', 3631, NULL, 3132, 75835, 'AWD Automatic', '2016-11-24', NULL),
('VPHGVN8BK0T813973', 2007, 'Jeep', 'Wrangler', 'SLT', 'White', 'Tan', 15345, NULL, 9227, 32793, '4WD Automatic', '2017-05-23', NULL),
('78A237Y8NNHTEZ16P', 2012, 'Dodge', 'Durango', 'SE', 'Beige', 'Beige', 7826, NULL, 5359, 66879, 'RWD Automatic', '2017-08-30', NULL),
('Y2LLRAF69VGZUW2Y4', 2015, 'Toyota', 'RAV4', 'LX', 'Black', 'Gray', 15755, NULL, 13158, 98925, 'RWD Automatic', '2021-01-25', NULL),
('YDTXY5REVNDUWE25R', 2005, 'Dodge', 'Durango', 'Limited', 'Silver', 'Beige', 2699, NULL, 2195, '121684', 'AWD Automatic', '2014-06-19', NULL),
('7KPFL9A20RGANDPCY', 2021, 'Jeep', 'Compass', 'LX', 'Blue', 'Tan', 23686, NULL, 1891, 47937, 'RWD Automatic', '2024-09-22', NULL),
('DVXETSTVJ20BF5P0R', 2007, 'Volkswagen', 'Jetta', 'Limited', 'Silver', 'Brown', 22740, NULL, 15708, 69121, 'FWD Automatic', '2019-04-30', NULL),
('W90MS9EMC5589A4UT', 2008, 'Dodge', 'Charger', 'SEL', 'Brown', 'Tan', 14293, NULL, 8754, 118684, '4WD Automatic', '2023-09-26', NULL),
('VB21R5T1T8ZFBTAKJ', 2022, 'Honda', 'Pilot', 'Touring', 'Black', 'Gray', 13776, NULL, 10616, 126206, '4WD Automatic', '2021-11-04', NULL),
('9YGFP074KD3UN8P4V', 2015, 'Volkswagen', 'Passat', 'S', 'Green', 'Beige', 16879, NULL, 15005, 188985, '4WD Automatic', '2020-04-01', NULL),
('4Z83HW0KEFJAF3RTC', 2012, 'Hyundai', 'Tucson', 'Base', 'Green', 'Gray', 15107, NULL, 10398, 86957, 'RWD Automatic', '2014-10-16', NULL),
('DMA3E6ADTNC1HC61K', 2010, 'Honda', 'CR-V', 'SEL', 'Beige', 'Tan', 18013, NULL, 11180, 195171, 'AWD Automatic', '2010-06-28', NULL),
('V79VH8P5JBD710DT4', 2007, 'Dodge', 'Journey', 'SE', 'Red', 'Gray', 8726, NULL, 5796, 83413, 'RWD Automatic', '2013-02-28', NULL),
('WB4G4TNSNBJF7XLSG', 2019, 'Chevrolet', 'Traverse', 'Laredo', 'Silver', 'Beige', 21206, NULL, 14614, '106846', 'AWD Automatic', '2020-02-09', NULL),
('NCJ5TCJ6Y0M61K77K', 2020, 'Honda', 'Pilot', 'SEL', 'Silver', 'Beige', 21855, NULL, 18521, 86490, 'AWD Automatic', '2023-12-27', NULL),
('VFP1NWRW4KZD7Z1CU', 2015, 'Nissan', 'Altima', 'SE', 'Silver', 'Tan', 6990, NULL, 1895, 74286, 'FWD Automatic', '2014-05-30', NULL),
('L9CVT6RKZ3TZ3BUC2', 2016, 'Jeep', 'Cherokee', 'SE', 'Blue', 'Beige', 2362, NULL, 1711, 136965, 'FWD Automatic', '2021-04-05', NULL),
('YTLX6FJCF1U74MA2J', 2022, 'Toyota', 'Tacoma', 'Sport', 'Blue', 'Brown', 9766, NULL, 6135, 133068, 'RWD Automatic', '2015-04-21', NULL),
('6KDW8C21DLX323W1Y', 2007, 'Kia', 'Sportage', 'Base', 'Black', 'Tan', 22849, NULL, 15762, 79341, 'AWD Automatic', '2011-10-24', NULL),
('4Z4M74323AFGPEXVG', 2014, 'Volkswagen', 'Tiguan', 'Base', 'White', 'Gray', 22070, NULL, 18752, 122968, 'FWD Automatic', '2011-12-11', NULL),
('YJZW3RT6F3Y80789U', 2021, 'Toyota', 'Camry', 'EX', 'Green', 'Brown', 2081, NULL, 1780, 168738, '4WD Automatic', '2014-06-09', NULL),
('DT8DG4VU3Y8734Z39', 2011, 'Volkswagen', 'Jetta', 'Sport', 'White', 'Beige', 18791, NULL, 15862, 60915, 'FWD Automatic', '2018-11-25', NULL),
('GXWLG4D3BS38CETX0', 2021, 'Nissan', 'Sentra', 'Laredo', 'Red', 'Beige', 6657, NULL, 5391, 167204, 'AWD Automatic', '2023-09-30', NULL),
('2S7LC4T7V51JKK06V', 2006, 'Toyota', 'RAV4', 'S', 'Black', 'Tan', 19102, NULL, 12351, 72691, '4WD Automatic', '2020-05-18', NULL),
('0YR0B8N9DFLB6NZWW', 2020, 'Volkswagen', 'Passat', 'SLT', 'Black', 'Brown', 5284, NULL, 3374, 55920, 'RWD Automatic', '2017-07-31', NULL),
('289XNFUEMKKB4TVSX', 2013, 'Toyota', 'Corolla', 'S', 'Brown', 'Black', 18441, NULL, 11326, 74895, '4WD Automatic', '2015-04-12', NULL),
('8T5L3RLND7S9SMJVR', 2018, 'Dodge', 'Durango', 'EX', 'Silver', 'Black', 3485, NULL, 2436, 121832, 'AWD Automatic', '2019-12-20', NULL),
('JMES7DW0G1LR2WCUD', 2011, 'Dodge', 'Durango', 'Limited', 'Green', 'Beige', 11106, NULL, 8699, 149980, '4WD Automatic', '2020-01-24', NULL),
('3YUVNNAACG86BS5RM', 2020, 'Chevrolet', 'Traverse', 'LX', 'Black', 'Gray', 7598, NULL, 5023, 76015, 'FWD Automatic', '2017-03-11', NULL),
('ZT1ZMN40WP5S9R26U', 2009, 'Toyota', 'Tacoma', 'EX', 'Green', 'Brown', 5375, NULL, 4223, 99403, 'RWD Automatic', '2011-03-16', NULL),
('EDRZSSDJGNDFUGNP0', 2008, 'Volkswagen', 'Passat', 'SEL', 'White', 'Tan', 11259, NULL, 7072, 134127, 'RWD Automatic', '2022-12-14', NULL),
('ETDCPD5JDCHUXJHRW', 2005, 'Jeep', 'Cherokee', 'Touring', 'Gray', 'Beige', 12965, NULL, 8454, 194347, 'AWD Automatic', '2016-09-22', NULL),
('GHX0GUPCFJBNNXA4C', 2016, 'Honda', 'Accord', 'S', 'Red', 'Brown', 4338, NULL, 2906, 179515, '4WD Automatic', '2013-01-24', NULL),
('YCUDNS2047M6VTBDM', 2019, 'Volkswagen', 'Passat', 'SE', 'Green', 'Gray', 20172, NULL, 13514, 36624, 'RWD Automatic', '2011-10-24', NULL),
('5EKTN38V2TL8PED7N', 2008, 'Chevrolet', 'Malibu', 'LX', 'Gray', 'Brown', 16423, NULL, 10703, 150352, 'AWD Automatic', '2023-08-13', NULL),
('TZD6X79GG2TTBUFN8', 2007, 'Ford', 'F-150', 'Laredo', 'Green', 'Brown', 16493, NULL, 10905, 140086, 'RWD Automatic', '2016-06-26', NULL),
('2D3UVA93B4FZNPXLX', 2021, 'Hyundai', 'Tucson', 'Base', 'Blue', 'Gray', 9361, NULL, 8177, 60915, 'RWD Automatic', '2016-11-24', NULL),
('0GRN2C2UKXH3PH3Z4', 2016, 'Kia', 'Sportage', 'SEL', 'Brown', 'Brown', 16138, NULL, 10509, 190981, 'RWD Automatic', '2010-11-22', NULL),
('05PUEU2W437VSWFEX', 2009, 'Hyundai', 'Tucson', 'Base', 'Brown', 'Gray', 15272, NULL, 11123, 43327, '4WD Automatic', '2023-01-23', NULL),
('XMRJ60MR3C0W3NSRJ', 2021, 'Volkswagen', 'Jetta', 'SEL', 'Green', 'Gray', 21631, NULL, 13267, 88480, 'RWD Automatic', '2021-02-16', NULL),
('SDFH23489RY243H2', 1975, 'Volkswagen', 'Karmann Ghia', 'Blue', 'Green', 'Gray', 12500, NULL, 13267, 88480, 'RWD Automatic', '2021-05-19', NULL),
('7RNJAE4JTXL4VVLWM', 2018, 'Nissan', 'Altima', 'SLT', 'Gray', 'Beige', 7383, NULL, 6511, 163513, 'FWD Automatic', '2017-06-05', NULL),
('SG5XEW38JD8X73JL5', 2009, 'Ford', 'Escape', 'Touring', 'White', 'Beige', 19034, NULL, 12527, 196499, 'RWD Automatic', '2012-06-28', NULL);
";
if ($mysqli->query($query3) === TRUE) {
    echo "<p>127 cars inserted into inventory table.</p>";
}
else
{
echo  $mysqli_error();
    echo "<p>Error Inserting 27 cars: </p>" . printf("Errormessage: %s\n", $mysqli->error);
    echo "<p>***********</p>";
    echo $query3;
    echo "<p>***********</p>";
}

// create image table
$query = " CREATE TABLE IF NOT EXISTS IMAGES (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT, VIN varchar(17), ImageFile varchar(250))";
if ($mysqli->query($query) === TRUE)
{
    echo "Database table 'Images' created</P>";
}
else
{
    echo "<p>Error: " . mysqli_error($mysqli);
}



 //$query = "ALTER TABLE `inventory` ADD `Primary_Image` VARCHAR(250) NULL AFTER `SALE_DATE`";
 echo "<p>***********</p>";
 echo $query ;
 echo "<p>***********</p>";
 if ($mysqli->query($query) === TRUE) 
 {
     echo "Database table 'INVENTORY' modified</P>";
 }
 else
 {
     echo "<p>Error: </p>" . $mysqli->error."<br>";;
 }

 $mysqli->close();

?>
<html>
<a href="https://jtowne.great-site.net/carapp2/">Home</a>
</html>