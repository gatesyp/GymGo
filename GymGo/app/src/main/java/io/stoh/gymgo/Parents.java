package io.stoh.gymgo;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

/**
 * Created by GeczySSD on 2/20/2016.
 */
    public abstract class Parents extends SlideIn implements AdapterView.OnItemSelectedListener
{
        private Spinner spinner;
        private static final String[]paths = {"Peter", "Steve", "Bartha"};

        @Override
        protected void onCreate(Bundle savedInstanceState){
            super.onCreate(savedInstanceState);
            setContentView(R.layout.parent_preference);

            spinner = (Spinner)findViewById(R.id.spinner);
            ArrayAdapter<String>adapter = new ArrayAdapter<String>(Parents.this,
                    android.R.layout.simple_spinner_item,paths);

            adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
            spinner.setAdapter(adapter);
            spinner.setOnItemSelectedListener(this);

        }

        public void onItemSelected(AdapterView<?> parent, View v, int position, long id) {

            switch (position) {
                case 0:
                    // Whatever you want to happen when the first item gets selected
                    break;
                case 1:
                    // Whatever you want to happen when the second item gets selected
                    break;
                case 2:
                    // Whatever you want to happen when the thrid item gets selected
                    break;

            }
        }

    }

