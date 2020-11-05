


<?php

include 'includes/header.php'

?>


<!DOCTYPE html>
<html>
<head>
 


    <title>hotel booking</title>

    <style>
        h2
        {
            background-color: yellow;

        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            background: rgb(23, 241, 114);
            overflow: hidden;
        }
        li{
            float: left;
        }

        th
        {
            background: yellow;
            text-rendering: optimizeLegibility;
        }
        li a{
            display: inline-block;
            text-align: center;
            padding: 15px 16px;
            text-decoration: none;
            color: crimson;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        li a:hover{
            background-color: rgb(69, 8, 235);
            color: #ffffff;
        }
        footer{
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
            background-color: black;
        }
        .footer_img{
            width: 500%;
            height: auto;
            padding-left: 350px;
        }
        p{
            text-align: justify;
        }
        .first{
            background: #c94c4c;
        }
        .second{
            background: #3f98e0;
        }
        .third{
            background: #e03f9d;
        }
       #one, #two, #three{
           padding-top: 5px;
       }

        #four{
            background: #077a37;
        }
        #more{
            background: #a8e03f;
        }
        button{
            text-align: center;
            color: white;
            background-color:red;
            font-size: 18px;
            margin: 4px 2px;
            border-radius: 8px;
        }
        button:hover{
            color:#e03f9d;
            background-color: chartreuse;
        }
    </style>

</head>
<body>
<body style="background-color:#eaB89f;">



    <table border="1px" width="75%" align="center" cellspacing="0">
        <tr>
            <td colspan="5">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Booking</a>
                    </li>
                    <li>
                        <a href="#">Prices & Rating</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
             <td colspan="3">
                <img src="img/chitwan.jpg" height="750", width="1000">
            </td>
            <td colspan="2">
                <table align="left" width="100%">
              <center> <h2> Tiger Resort chitwan</h2></center>     
                    <tr>
                        <th>Book a Room</th>

                    </tr>
                    <tr>

                        <td>
                            <h4>Name:</h4>
                            <input type="text" placeholder="Enter your name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Address:</h4>
                            <input type="text" placeholder="Enter your address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Contact:</h4>
                            <input type="number" placeholder="Enter your contact">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Email:</h4>
                            <input type="text" placeholder="Enter your email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>No. of days to stay:</h4>
                            <input type="number" placeholder="No. of days you want to stay">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Date of arrival:</h4>
                            <input type="date">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>No. Of Rooms:</h4>
                            <input type="number" placeholder="Number of rooms">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button>Submit</button>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table align="center" width="75%">
        <tr id="four">
            <td>
                <h3 id="one">Packages</h3>
                <hr>
            </td>
            <td>
                <h3 id="two">Best Rates</h3>
                <hr>
            </td>
            <td>
                <h3 id="three">Hotel Guides</h3>
                <hr>
            </td>
        </tr>
        <tr>
            <td class="first">
                <p>
                   The Ice Hotel in Jukkasjärvi, Sweden, was the first ice hotel in the world; first built in 1990, it is built each winter and melts every spring. The Hotel de Glace in Duschenay, Canada, opened in 2001 and it's North America's only ice hotel. It is redesigned and rebuilt in its entirety every year. Ice hotels can also be included within larger ice complexes; for example, the Mammut Snow Hotel in Finland is located within the walls of the Kemi snow castle; and the Lainio Snow Hotel is part of a snow village near Ylläs, Finland. There is an arctic snowhotel in Rovaniemi in Lapland, Finland, along with glass igloos.[20] The first glass igloos were built in 1999 in Finland,they became the Kakslauttanen Arctic Resort with 65 buildings, 53 small ones for two people and 12 large ones for four people. Glass igloos, with their roof made of thermal glass, allow guests to admire auroras comfortably from their beds.[21]
                </p>
            </td>
            <td class="second">
                <p>
                  The Ice Hotel in Jukkasjärvi, Sweden, was the first ice hotel in the world; first built in 1990, it is built each winter and melts every spring. The Hotel de Glace in Duschenay, Canada, opened in 2001 and it's North America's only ice hotel. It is redesigned and rebuilt in its entirety every year. Ice hotels can also be included within larger ice complexes; for example, the Mammut Snow Hotel in Finland is located within the walls of the Kemi snow castle; and the Lainio Snow Hotel is part of a snow village near Ylläs, Finland. There is an arctic snowhotel in Rovaniemi in Lapland, Finland, along with glass igloos.[20] The first glass igloos were built in 1999 in Finland,they became the Kakslauttanen Arctic Resort with 65 buildings, 53 small ones for two people and 12 large ones for four people. Glass igloos, with their roof made of thermal glass, allow guests to admire auroras comfortably from their beds.[21]
            </td>
            <td class="third">
                <p>
                  The Ice Hotel in Jukkasjärvi, Sweden, was the first ice hotel in the world; first built in 1990, it is built each winter and melts every spring. The Hotel de Glace in Duschenay, Canada, opened in 2001 and it's North America's only ice hotel. It is redesigned and rebuilt in its entirety every year. Ice hotels can also be included within larger ice complexes; for example, the Mammut Snow Hotel in Finland is located within the walls of the Kemi snow castle; and the Lainio Snow Hotel is part of a snow village near Ylläs, Finland. There is an arctic snowhotel in Rovaniemi in Lapland, Finland, along with glass igloos.[20] The first glass igloos were built in 1999 in Finland,they became the Kakslauttanen Arctic Resort with 65 buildings, 53 small ones for two people and 12 large ones for four people. Glass igloos, with their roof made of thermal glass, allow guests to admire auroras comfortably from their beds.[21]
                </p>
            </td>
        </tr>
        <tr id="more">
            <td>
                <h2>More About Us</h2>
                <hr>
                <p>
                   Boutique hotels are typically hotels with a unique environment or intimate setting. Some hotels have gained their renown through tradition, by hosting significant events or persons, such as Schloss Cecilienhof in Potsdam, Germany, which derives its fame from the Potsdam Conference of the World War II allies Winston Churchill, Harry Truman and Joseph Stalin in 1945.[12] The Taj Mahal Palace & Tower in Mumbai is one of India's most famous and historic hotels because of its association with the Indian independence movement. Some establishments have given name to a particular meal or beverage, as is the case with the Waldorf Astoria in New York City, United States where the Waldorf Salad was first created or the Hotel Sacher in Vienna, Austria, home of the Sachertorte. Others have achieved fame by association with dishes or cocktails created on their premises, such as the Hotel de Paris where the crêpe Suzette was invented or the Raffles Hotel in Singapore, where the Singapore Sling cocktail was devised.[13]
                </p>
            </td>
        
        
                <p>
                    Some hotels are built specifically as a destination in itself to create a captive trade, example at casinos, amusement parks and holiday resorts. Though hotels have always been built in popular destinations, the defining characteristic of a resort hotel is that it exists purely to serve another attraction, the two having the same owners.

On the Las Vegas Strip there is a tradition of one-upmanship with luxurious and extravagant hotels in a concentrated area. This trend now has extended to other resorts worldwide, but the concentration in Las Vegas is still the world's highest: nineteen of the world's twenty-five largest hotels by room count are on the Strip, with a total of over 67,000 rooms.[14]
                   
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <footer>
                    &copy; All Rights Reserved. Powered by hotel booking system
                </footer>
            </td>
        </tr>
    </table>
    </body>
</html>
<?php
include 'includes/footer.php'
?>