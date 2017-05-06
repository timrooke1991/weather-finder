# weather-finder

This site can be used to get the weather forecast for any place in the world. The aim of the project was to get more comfortable with PHP and build a polish website using the PHP programming language. 

There was less emphasis on the design and look of the site. However, to ensure things looked presentable, I relied on Bootstrap for many of the elements. I also got a nice, high-res image from unsplash.com to sit in the background. jQuery is used to display and hide alerts to the user - this done using fadeIn() and fadeOut(). The site uses AJAX to load data, so the site does not refresh when fetching and retrieving weather data. 

In order to get the data, I use PHP to scrap the 3 Day Weather Forecast Summary from www.weather-forecast.com. Scraping is a useful technique as it allows you to accumulate date quickly and easily, but also allows you build dynamic web applications with relative ease. However, you must check the website’s robot.txt file and any relevant scraping policies before you go ahead and do so. Once I append the input to a weather-forecast string to create the required URL, I use preg_match to perform a a regular expression match on the source code, which returns the corresponding 3 Day Weather Forecast Summary text. 

There is some basic validation on the site. If a forecast can’t be found, it prompts the user to check their spelling. Also, if nothing is entered, it prompts the user to enter a city.
