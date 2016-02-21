package io.stoh.gymgo;


import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;

import com.loopj.android.http.RequestParams;

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

        if(Utilities.equals((Button) findViewById(R.id.butt_help).getTag(), "extend")) {
            RequestParams requestParams = new RequestParams();
            requestParams.put("user_name", "bin laden");
            requestParams.put("exercise_name", "dead lift lol");
            new InvokeWS(this, "transactions", requestParams, new WSInterface() {
                @Override
                public void requestComplete(JSONObject jsonObject) {
                    ((Button)findViewById(R.id.butt_help)).setText("Extend Service");
                    ((Button)findViewById(R.id.butt_help)).setTag("extend");
                /*try {
                    if(Utilities.equals(jsonObject.getInt("response"), "200")) {

                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }*/
                }
            }, true);
            return;
        }



        RequestParams requestParams = new RequestParams();
        requestParams.put("user_name", "Chuck Norris");
        requestParams.put("exercise_name", "dead lift lol");
        new InvokeWS(this, "issues", requestParams, new WSInterface() {
            @Override
            public void requestComplete(JSONObject jsonObject) {
                ((Button)findViewById(R.id.butt_help)).setText("Extend Service");
                ((Button)findViewById(R.id.butt_help)).setTag("extend");
                /*try {
                    if(Utilities.equals(jsonObject.getInt("response"), "200")) {

                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }*/
            }
        }, true);
    }



}
