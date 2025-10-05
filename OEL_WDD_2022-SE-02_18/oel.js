  document.addEventListener('DOMContentLoaded', function() {
            const apiKey = "1af8e631053c314238ce0f8b0914e8c1";
        const apiUrl = "./weather.php?city=";
            
            const cityInput = document.getElementById('cityInput');
            const searchBtn = document.getElementById('searchBtn');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const errorAlert = document.getElementById('errorAlert');
            const weatherDisplay = document.getElementById('weatherDisplay');
            
            // Weather display elements
            const weatherIcon = document.getElementById('weatherIcon');
            const temperature = document.getElementById('temperature');
            const cityName = document.getElementById('cityName');
            const weatherCondition = document.getElementById('weatherCondition');
            const humidity = document.getElementById('humidity');
            const windSpeed = document.getElementById('windSpeed');
            const feelsLike = document.getElementById('feelsLike');
            const visibility = document.getElementById('visibility');
            
            // Search functionality
            searchBtn.addEventListener('click', searchWeather);
            cityInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    searchWeather();
                }
            });
            
            function searchWeather() {
                const city = cityInput.value.trim();
                
                if (!city) {
                    showError("Please enter a city name");
                    return;
                }
                
                // Show loading spinner
                loadingSpinner.style.display = 'block';
                errorAlert.style.display = 'none';
                weatherDisplay.style.display = 'none';
                
                // Fetch weather data via PHP proxy
                fetch(apiUrl + encodeURIComponent(city))
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const contentType = response.headers.get("content-type");
        if (!contentType || !contentType.includes("application/json")) {
            throw new Error("Invalid JSON response from server");
        }
        return response.json();
    })
                    .then(data => {
                        if (data.cod === 200) {
                            displayWeather(data);
                        } else {
                            throw new Error(data.message || 'City not found');
                        }
                    })
                    .catch(error => {
                        showError(error.message);
                    })
                    .finally(() => {
                        loadingSpinner.style.display = 'none';
                    });
            }
            
            function displayWeather(data) {
                // Update weather information
                cityName.textContent = data.name + ', ' + data.sys.country;
                temperature.textContent = Math.round(data.main.temp) + '°C';
                weatherCondition.textContent = data.weather[0].description;
                humidity.textContent = data.main.humidity + '%';
                windSpeed.textContent = data.wind.speed + ' km/h';
                feelsLike.textContent = Math.round(data.main.feels_like) + '°C';
                visibility.textContent = (data.visibility / 1000).toFixed(1) + ' km';
                
                // Set weather icon
                const iconCode = data.weather[0].icon;
                weatherIcon.src = `https://openweathermap.org/img/wn/${iconCode}@2x.png`;
                weatherIcon.alt = data.weather[0].description;
                
                // Show weather display
                weatherDisplay.style.display = 'block';
            }
            
            function showError(message) {
                document.getElementById('errorMessage').textContent = message;
                errorAlert.style.display = 'block';
                weatherDisplay.style.display = 'none';
            }
        });