package io.stoh.gymgo;

import retrofit2.Callback;
import retrofit2.http.GET;
import retrofit2.http.Query;

/**
 * Created by GeczySSD on 2/20/2016.
 */

public class TestRetro
{

    public class WeatherResponse
    {
        private int cod;
        private String base;
        private Weather main;
        // default constructor, getters and setters
    }

    public class Weather
{
    private int id;
    private String main;
    private String description;
    // default constructor, getters and setters
}

    public interface Api
    {
        @GET("/weather")
        void getWeather(@Query("q") String cityName,
                        Callback<WeatherResponse> callback);
    }
}
