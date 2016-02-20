package io.stoh.gymgo;


import android.app.Fragment;
import android.app.ListFragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListView;

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
        exerciseList = new ArrayList<>();
        exerciseList.add(new Exercise(1, "Crunches", "these suck lol"));
        exerciseList.add(new Exercise(2, "Crunches2", "these suck lol2"));
        exerciseList.add(new Exercise(3, "Crunches3", "these suck lol2"));
        exerciseList.add(new Exercise(4, "Crunches4", "these suck lol4"));





        doInflate();




        return inflater.inflate(R.layout.fragment_exercise_list, container, false);
    }

    private void doInflate() {
        Log.e("doInflate", "Called:" + exerciseList.size());
        exerciseAdapter = new ExerciseAdapter(getActivity(), R.layout.fragment_exercise_list, exerciseList);
        setListAdapter(exerciseAdapter);
    }
}
