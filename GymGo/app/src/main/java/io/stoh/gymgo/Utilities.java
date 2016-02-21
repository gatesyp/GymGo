package io.stoh.gymgo;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class Utilities {

    private static boolean DEBUG_MODE = true;


    public static boolean equals(Object a, Object b) {
        return (a==b) || (a != null && a.equals(b));
    }

    public static String getServerIP() {
        return "https://stoh.io/";
    }

    public static ArrayList<Exercise> parseExercises(JSONObject jsonObject, String arrayKey) {

        ArrayList<Exercise> exercises = new ArrayList<>();
        try {
            JSONArray jsonArray = jsonObject.optJSONArray(arrayKey);
            for (int i = 0; i < jsonArray.length(); ++i) {
                JSONObject obj = jsonArray.optJSONObject(i);
                exercises.add(new Exercise(obj.getInt("id"), obj.getString("name"), obj.getString("description")));
            }
        } catch (JSONException e) {
            e.printStackTrace();
        }
        return exercises;
    }


    public static boolean getDebugState() {
        return DEBUG_MODE;
    }

}
