package io.stoh.gymgo;


import android.app.ListFragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListView;

import org.json.JSONObject;

import java.util.ArrayList;

public class ExerciseListFragment extends ListFragment {

    ExerciseAdapter exerciseAdapter;

    ArrayList<Exercise> exerciseList;

    @Override
    public void onListItemClick(ListView l, View v, int position, long id) {
        super.onListItemClick(l, v, position, id);

    }

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {

        getExercises();


        return inflater.inflate(R.layout.fragment_exercise_list, container, false);
    }

    private void getExercises() {
        new InvokeWS(getActivity(), "forNoah.php", null, new WSInterface() {
            @Override
            public void requestComplete(JSONObject jsonObject) {
                exerciseList = Utilities.parseExercises(jsonObject, "result");
                doInflate();
            }
        });
    }

    private void doInflate() {
        Log.e("doInflate", "Called:" + exerciseList.size());
        exerciseAdapter = new ExerciseAdapter(getActivity(), R.layout.fragment_exercise_list, exerciseList);
        setListAdapter(exerciseAdapter);
    }
}
