package io.stoh.gymgo;


import retrofit2.Callback;
import retrofit2.http.GET;

public interface WebInterface {

    @GET("/forNoah.php")
//    Call<>
//    void testName (Callback<ServerResult> callback);
    ServerResult testName();

}
