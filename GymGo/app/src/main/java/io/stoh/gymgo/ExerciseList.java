package io.stoh.gymgo;


import java.util.List;


public class ExerciseList {

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
