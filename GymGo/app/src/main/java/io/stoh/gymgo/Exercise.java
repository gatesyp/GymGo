package io.stoh.gymgo;

public class Exercise {

    private int key;
    private String name;

    public int getKey() {
        return key;
    }

    public void setKey(int key) {
        this.key = key;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getImage() {
        return image;
    }

    public void setImage(int image) {
        this.image = image;
    }

    private String description;

    //Todo: implement image later lol
    private int image;

    public Exercise(int key, String name, String description) {
        this.key = key;
        this.name = name;
        this.description = description;
//        this.image = image;
    }




}
