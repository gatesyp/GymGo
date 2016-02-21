package io.stoh.gymgo;

import android.app.Fragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import org.json.JSONException;
import org.json.JSONObject;

import io.stoh.gymgo.R;

public class ExerciseDetailFragment extends Fragment {

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_exercise_detail, container, false);
        Exercise exercise = null;
        exercise = new Exercise((Integer)getArguments().get("exercise_id"), (String)getArguments().get("exercise_name"), (String)getArguments().get("exercise_description"));
        ((TextView)view.findViewById(R.id.exercise_descriptions)).setText(exercise.getDescription());
        getActivity().setTitle(exercise.getName());

        return view;
    }
}
