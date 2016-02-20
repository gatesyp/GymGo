package io.stoh.gymgo;

public class Exercise {

    private int id;
    private String name;

    public String getStatic_image() {
        return static_image;
    }

    public void setStatic_image(String static_image) {
        this.static_image = static_image;
    }

    public String getGif_image() {
        return gif_image;
    }

    public void setGif_image(String gif_image) {
        this.gif_image = gif_image;
    }

    private String static_image;
    private String gif_image;
    private String description;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
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



    public Exercise(int id, String name, String description) {
        this.id = id;
        this.name = name;
        this.description = description;
//        this.image = image;
    }




}
