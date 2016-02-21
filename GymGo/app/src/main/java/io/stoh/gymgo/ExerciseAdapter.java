package io.stoh.gymgo;

import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.ArrayList;

public class ExerciseAdapter extends ArrayAdapter<Exercise> {

    private ArrayList<Exercise> arrayList;
    private final Context context;

    public ExerciseAdapter(Context context, int resource, ArrayList<Exercise> objects) {
        super(context, resource, objects);
        this.arrayList = new ArrayList<>();
        this.arrayList.addAll(objects);
        this.context = context;
    }

    static class ViewHolder {
        TextView name;
        TextView description;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        final ViewHolder viewHolder;
        final int pos;
        if (convertView == null) {
            LayoutInflater vi = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView = vi.inflate(R.layout.exercise_list_item, parent, false);

            viewHolder = new ViewHolder();
            viewHolder.name = (TextView) convertView.findViewById(R.id.exercise_name);
            viewHolder.description = (TextView) convertView.findViewById(R.id.exercise_description);
            convertView.setTag(R.string.viewholder_tag,viewHolder);
        } else {
            viewHolder = (ViewHolder)convertView.getTag(R.string.viewholder_tag);
        }
        final Exercise exercise = arrayList.get(position);
        viewHolder.name.setText(exercise.getName());
        viewHolder.description.setText(exercise.getDescription());
        convertView.setTag(R.string.viewholder_tag, viewHolder);
        convertView.setTag(R.string.exercise_tag, exercise);
        return convertView;
    }

    public void clearData() {
        arrayList.clear();
    }


}
