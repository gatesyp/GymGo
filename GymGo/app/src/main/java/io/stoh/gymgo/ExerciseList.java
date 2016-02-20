package io.stoh.gymgo;


import java.util.ArrayList;
import java.util.List;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class ExerciseList {

    @SerializedName("exercise")
    @Expose
    private List<Exercise> exercise;

    /**
     *
     * @return
     * The exercise
     */
    public List<Exercise> getExercise() {
        return exercise;
    }

    /**
     *
     * @param exercise
     * The exercise
     */
    public void setExercise(List<Exercise> exercise) {
        this.exercise = exercise;
    }

    @Override
    public String toString() {
        String returnString = "hello" + exercise.size();
        for(Exercise exerciseElement : exercise) {
            returnString += exerciseElement.toString();
        }
        return returnString;
    }
}
