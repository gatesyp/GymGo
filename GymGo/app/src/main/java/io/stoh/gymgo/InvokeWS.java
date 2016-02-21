package io.stoh.gymgo;

import android.content.Context;
import android.util.Log;
import android.widget.Toast;

import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.JsonHttpResponseHandler;
import com.loopj.android.http.RequestParams;

import org.json.JSONException;
import org.json.JSONObject;

import cz.msebera.android.httpclient.Header;

public class InvokeWS {

    private int TIMEOUT = 10000;

    private String ip;
    private Context context;
    private RequestParams params;
    private WSInterface callback;
    JSONObject jsonObject;

    public InvokeWS(final Context context, String path, RequestParams params, WSInterface callback) {
        this.ip = Utilities.getServerIP() + path;
        this.context = context;
        this.params = params;
        this.callback = callback;
        connect();
    }

    private void connect() {
        AsyncHttpClient client = new AsyncHttpClient();
        client.setTimeout(TIMEOUT);


        client.get(ip, params, new JsonHttpResponseHandler() {

            @Override
            public void onSuccess(int statusCode, Header[] headers, JSONObject responseBody) {
                Log.e("JSON Raw", responseBody.toString());
                jsonObject = responseBody;
                callback.requestComplete(jsonObject);

            }

            @Override
            public void onFailure(int statusCode, Header[] headers, Throwable error, JSONObject obj) {

                if (statusCode == 404) {
                    Toast.makeText(context, "Requested resource not found", Toast.LENGTH_LONG).show();
                } else if (statusCode == 500) {
                    Toast.makeText(context, "Something went wrong at server end", Toast.LENGTH_LONG).show();
                } else {
                    Toast.makeText(context, "Unexpected Error occurred!  Possibly no internet connection", Toast.LENGTH_LONG).show();
                }
                try {
                    if(jsonObject == null) {
                        jsonObject = new JSONObject();
                    }
                    jsonObject.put("statusCode", statusCode);
                } catch (JSONException e) {
                    e.printStackTrace();
                }

                  callback.requestComplete(jsonObject);
            }

            @Override
            public void onFailure(int statusCode, Header[] headers, String string, Throwable error) {
                if (statusCode == 404) {
                    Toast.makeText(context, "Requested resource not found", Toast.LENGTH_LONG).show();
                } else if (statusCode == 500) {
                    Toast.makeText(context, "Something went wrong at server end", Toast.LENGTH_LONG).show();
                } else {
                    Toast.makeText(context, "Unexpected Error occurred!  Possibly no internet connection", Toast.LENGTH_LONG).show();
                }
                try {
                    if(jsonObject == null) {
                        jsonObject = new JSONObject();
                    }
                    jsonObject.put("statusCode", statusCode);
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                callback.requestComplete(jsonObject);
            }
        });

    }

    public JSONObject getResult() {
        return jsonObject;
    }

    public String getIp() {
        return ip;
    }

    public static boolean isValid(JSONObject jsonObject) {
        return jsonObject != null && !jsonObject.has("statusCode");
    }

    public static boolean isSuccess(JSONObject jsonObject) throws JSONException {
        return isValid(jsonObject) && Utilities.equals(jsonObject.getString("response"), "true");
    }



}
