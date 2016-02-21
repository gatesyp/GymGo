package io.stoh.gymgo;


import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.http.GET;

public interface WebInterface {

    @GET("/forNoah.php")
    public void getExerciseList(Callback);
//    Call<ServerResult> testName();

}
