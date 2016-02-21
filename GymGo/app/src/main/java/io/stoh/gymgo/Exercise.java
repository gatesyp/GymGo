
package io.stoh.gymgo;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Exercise {

    @SerializedName("id")
    @Expose
    private int id;
    @SerializedName("name")
    @Expose
    private String name;
    @SerializedName("static_image")
    @Expose
    private String staticImage;
    @SerializedName("gif_image")
    @Expose
    private String gifImage;
    @SerializedName("description")
    @Expose
    private String description;


    public Exercise(int id, String name, String description) {
        this.id = id;
        this.name = name;
        this.description = description;
    }

    /**
     *
     * @return
     * The id
     */
    public int getId() {
        return id;
    }

    /**
     *
     * @param id
     * The id
     */
    public void setId(int id) {
        this.id = id;
    }

    /**
     *
     * @return
     * The name
     */
    public String getName() {
        return name;
    }

    /**
     *
     * @param name
     * The name
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     *
     * @return
     * The staticImage
     */
    public String getStaticImage() {
        return staticImage;
    }

    /**
     *
     * @param staticImage
     * The static_image
     */
    public void setStaticImage(String staticImage) {
        this.staticImage = staticImage;
    }

<<<<<<< HEAD
=======
    /**
     *
     * @return
     * The gifImage
     */
    public String getGifImage() {
        return gifImage;
    }
>>>>>>> origin/android

    /**
     *
     * @param gifImage
     * The gif_image
     */
    public void setGifImage(String gifImage) {
        this.gifImage = gifImage;
    }

    /**
     *
     * @return
     * The description
     */
    public String getDescription() {
        return description;
    }

    /**
     *
     * @param description
     * The description
     */
    public void setDescription(String description) {
        this.description = description;
    }


    @Override
    public String toString() {
        return "ID: " + id + " Name: " + name + " Description: " + description;
    }
}