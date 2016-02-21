package io.stoh.gymgo;


import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;

import org.json.JSONObject;


public class MainActivity extends SlideIn {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
//        setContentView(R.layout.activity_main);
       setContentView(R.layout.activity_slide_in);


        new InvokeWS(this, "forNoah.php", null, new WSInterface() {
            @Override
            public void requestComplete(JSONObject jsonObject) {
                Log.e("Json", jsonObject.toString());

            }
        });

        getFragmentManager().beginTransaction().add(R.id.fragment_container, new ExerciseListFragment())
                .commit();

    }
    
    public void needHelp(View view) {

    }



}
