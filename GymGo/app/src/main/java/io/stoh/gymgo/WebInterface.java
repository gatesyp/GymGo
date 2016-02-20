package io.stoh.gymgo;


import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.http.GET;

public interface WebInterface {

    @GET("/forNoah.php")
//    Call<ServerResult> testName();
    Call<ExerciseList> getExerciseList

}
