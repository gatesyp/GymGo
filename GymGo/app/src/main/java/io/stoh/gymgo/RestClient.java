package io.stoh.gymgo;

import okhttp3.OkHttpClient;
import retrofit2.Retrofit;

public class RestClient {

    private static WebInterface REST_CLIENT;
    private static String root = "https://stoh.io";


    static {
        setupRestClient();
    }

    public static WebInterface get() {
        return REST_CLIENT;
    }

    private static void setupRestClient() {
        Retrofit builder = new Retrofit.Builder()
                .baseUrl(root)
                .build();

        REST_CLIENT = builder.create(WebInterface.class);

    }

}
