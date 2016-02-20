package io.stoh.gymgo;

import android.app.FragmentTransaction;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.FrameLayout;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class MainActivity extends AppCompatActivity implements Callback<ServerResult> {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void doTest(View view) {
        Retrofit builder = new Retrofit.Builder()
                .baseUrl(RestClient.getRoot())
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        WebInterface webInterface = builder.create(WebInterface.class);
        Call<ServerResult> serverResultCall = webInterface.testName();
        serverResultCall.enqueue(this);

        getFragmentManager().beginTransaction().add(R.id.fragment_container, new ExerciseListFragment())
                .commit();
    }


    @Override
    public void onResponse(Call<ServerResult> call, Response<ServerResult> response) {
        Log.e("result", response.body().getResponse());

    }

    @Override
    public void onFailure(Call<ServerResult> call, Throwable t) {

    }
}
